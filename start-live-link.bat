@echo off
title Zenweb Global Live Tunnel
echo ===================================================
echo   Zenweb - High-Speed Global Live Link
echo ===================================================
echo.

:: 1. Check if node server is running on port 3333
netstat -ano | findstr :3333 >nul
if %errorlevel% neq 0 (
    echo [*] Starting local Node.js server on port 3333...
    start /b "" node "%~dp0server.js"
    timeout /t 2 /nobreak >nul
) else (
    echo [*] Local Node.js server is already active on port 3333.
)

:: 2. Launch Cloudflare Tunnel
echo [*] Connecting to Cloudflare Global Anycast Network (330+ Edge locations)...
echo [*] Optimizing for zero latency and HTTP 206 video streaming...
echo.
"%ProgramFiles(x86)%\cloudflared\cloudflared.exe" tunnel --url http://localhost:3333
pause
