const fs = require('fs');
const zlib = require('zlib');
const { execSync } = require('child_process');

console.log('Minifying CSS files...');
execSync('npx clean-css-cli -o public/css/style.min.css css/style.css', { stdio: 'inherit' });
execSync('npx clean-css-cli -o public/css/responsive.min.css css/responsive.css', { stdio: 'inherit' });
execSync('npx clean-css-cli -o public/css/animations.min.css css/animations.css', { stdio: 'inherit' });

// Keep css/ folder mirrors in sync
fs.copyFileSync('public/css/style.min.css', 'css/style.min.css');
fs.copyFileSync('public/css/responsive.min.css', 'css/responsive.min.css');
fs.copyFileSync('public/css/animations.min.css', 'css/animations.min.css');
fs.copyFileSync('css/style.css', 'public/css/style.css');
fs.copyFileSync('css/responsive.css', 'public/css/responsive.css');
fs.copyFileSync('css/animations.css', 'public/css/animations.css');

console.log('Minifying JS files...');
execSync('npx terser js/main.js js/interactions.js js/animations.js -c -m -o public/js/app.min.js', { stdio: 'inherit' });
execSync('npx terser js/main.js -c -m -o public/js/main.min.js', { stdio: 'inherit' });
execSync('npx terser js/interactions.js -c -m -o public/js/interactions.min.js', { stdio: 'inherit' });
execSync('npx terser js/animations.js -c -m -o public/js/animations.min.js', { stdio: 'inherit' });
execSync('npx terser js/about.js -c -m -o public/js/about.min.js', { stdio: 'inherit' });

const filesToGzip = [
  'public/js/app.min.js',
  'public/js/main.min.js',
  'public/js/interactions.min.js',
  'public/js/animations.min.js',
  'public/js/about.min.js',
  'public/js/lenis.min.js',
  'public/css/style.min.css',
  'public/css/responsive.min.css',
  'public/css/animations.min.css'
];

for (const f of filesToGzip) {
  if (fs.existsSync(f)) {
    const raw = fs.readFileSync(f);
    const gz = zlib.gzipSync(raw, { level: 9 });
    fs.writeFileSync(f + '.gz', gz);
    console.log(`Gzipped ${f} -> ${(gz.length / 1024).toFixed(2)} KB (was ${(raw.length / 1024).toFixed(2)} KB)`);
  }
}

console.log('Assets build complete.');

