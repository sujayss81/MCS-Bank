@echo off
powershell  "$s=(New-Object -COM WScript.Shell).CreateShortcut('%userprofile%\Desktop\MCS_Arogya.lnk');$s.TargetPath='C:\wamp64\www\MCS-Bank\MCS_Arogya.exe';$s.Save()"