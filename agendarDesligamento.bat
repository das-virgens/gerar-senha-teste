@echo off
echo =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
echo =-=-=-=-= SETOR TI - UNIME ANHANGUERA SALVADOR - BA  -=-=-=
echo =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
echo =-=-= SISTEMA DESENVOLVIDO POR LUIS EDUARDO ANDRADE  -=-=-=
echo =-=-=-=-= SETOR TI - UNIME ANHANGUERA SALVADOR - BA  -=-=-=
echo =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
echo Pressione Enter para agendar a tarefa de desligar o PC às 21:59...
pause > nul

echo Agendando tarefa para desligar o PC às 21:59...

schtasks /create /sc daily /tn "DesligarPC" /tr "shutdown /s /f /t 0" /st 21:59

echo Tarefa agendada com sucesso!
pause
