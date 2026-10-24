/**
 * Zenerom UAE - Dedicated Single Blog Article Controller (js/blog-single.js)
 * Manages Dynamic Table of Contents, scrollspy navigation, reading progress, and sharing.
 */

(function () {
  'use strict';

  function init() {
    const contentEl = document.getElementById('singleBlogContent');
    const tocList = document.getElementById('singleBlogTocList');
    const tocCard = document.querySelector('.blog-toc-card');
    const progressBar = document.getElementById('blogReadingProgress');

    // 1. Top Reading Progress Bar
    if (progressBar) {
      const updateProgress = () => {
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = totalHeight > 0 ? (window.pageYOffset / totalHeight) * 100 : 0;
        progressBar.style.width = Math.min(Math.max(progress, 0), 100) + '%';
      };
      window.addEventListener('scroll', updateProgress, { passive: true });
      updateProgress();
    }

    // 2. Dynamic Table of Contents Builder from Server-Rendered Headings
    if (contentEl && tocList) {
      const headings = contentEl.querySelectorAll('h2, h3');
      if (headings.length === 0) {
        if (tocCard) tocCard.style.display = 'none';
      } else {
        if (tocCard) tocCard.style.display = 'block';
        let tocHtml = '';
        headings.forEach((heading, idx) => {
          const id = heading.id || `section-heading-${idx + 1}`;
          heading.id = id;
          const text = heading.textContent.trim();
          const isSub = heading.tagName.toLowerCase() === 'h3';
          tocHtml += `
            <li>
              <a href="#${id}" class="blog-toc-link" style="${isSub ? 'padding-left:0.85rem; font-size:0.8125rem;' : ''}">
                ${text}
              </a>
            </li>
          `;
        });
        tocList.innerHTML = tocHtml;

        // Smooth scrolling for TOC links
        const tocLinks = tocList.querySelectorAll('.blog-toc-link');
        tocLinks.forEach(link => {
          link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').slice(1);
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
              const headerOffset = 90;
              const elementPosition = targetEl.getBoundingClientRect().top;
              const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
              window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            }
          });
        });

        // Scrollspy active highlight
        const handleScrollSpy = () => {
          let currentId = '';
          const scrollPos = window.pageYOffset + 130;
          headings.forEach(heading => {
            if (heading.offsetTop <= scrollPos) {
              currentId = heading.id;
            }
          });
          tocLinks.forEach(link => {
            if (link.getAttribute('href') === `#${currentId}`) {
              link.classList.add('is-active');
            } else {
              link.classList.remove('is-active');
            }
          });
        };
        window.addEventListener('scroll', handleScrollSpy, { passive: true });
        handleScrollSpy();
      }
    }

    // 3. Copy Link Action
    const copyBtn = document.getElementById('singleBlogCopyBtn');
    if (copyBtn) {
      copyBtn.addEventListener('click', async () => {
        try {
          await navigator.clipboard.writeText(window.location.href);
          const originalTitle = copyBtn.getAttribute('title') || 'Copy Link';
          copyBtn.style.color = 'var(--brand-flamingo, #f26934)';
          copyBtn.setAttribute('title', 'Copied to clipboard!');
          setTimeout(() => {
            copyBtn.style.color = '';
            copyBtn.setAttribute('title', originalTitle);
          }, 2000);
        } catch (err) {
          console.warn('Copy link failed:', err);
        }
      });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
