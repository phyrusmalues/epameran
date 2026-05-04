# Script untuk forward port 8000 supaya orang lain boleh akses
# JALANKAN SEBAGAI ADMINISTRATOR

# Forward sambungan dari mana-mana IP (0.0.0.0:8000) ke localhost:8000
netsh interface portproxy add v4tov4 listenport=8000 listenaddress=0.0.0.0 connectport=8000 connectaddress=127.0.0.1

# Benarkan dalam Windows Firewall
netsh advfirewall firewall add rule name="Laravel Port 8000" dir=in action=allow protocol=TCP localport=8000

Write-Host "Port forwarding disediakan. Orang lain boleh akses via http://IP_ANDA:8000" -ForegroundColor Green
Write-Host "Untuk buang forwarding nanti, jalankan: netsh interface portproxy reset" -ForegroundColor Yellow
