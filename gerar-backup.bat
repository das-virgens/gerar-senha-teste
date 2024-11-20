@echo off
powershell -command "$wshell = New-Object -ComObject wscript.shell; $wshell.SendKeys('^{ESCAPE}')"
set "db_user=root"
set "db_password="
set "db_name=chamarsenha-unime"
set "backup_path=C:\xampp\htdocs\chamarsenha-unime\backup-sql\backup_%date:~-10,2%-%date:~-7,2%-%date:~-4,4%.sql"

set "mysqldump_path=C:\xampp\mysql\bin\mysqldump.exe"

"%mysqldump_path%" -u %db_user% --password=%db_password% %db_name% > "%backup_path%"

if %ERRORLEVEL% equ 0 (
    echo Backup concluído com sucesso.
) else (
    echo Erro ao fazer o backup.
)
pause
