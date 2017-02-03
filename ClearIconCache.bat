rem 清理系統圖示暫存檔
attrib -h -s -r "%userprofile%\AppData\Local\IconCache.db"　　
del /f "%userprofile%\AppData\Local\IconCache.db"　　) q: r$ G( |0 o; o) T! ?6 l& ~
attrib /s /d -h -s -r "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\*"
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_32.db"" w- p! T8 o/ c- S( u
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_96.db"
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_102.db"
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_256.db"
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_1024.db"9 e  d: ?- P5 s9 k; c
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_idx.db"
del /f "%userprofile%\AppData\Local\Microsoft\Windows\Explorer\thumbcache_sr.db"- O: G) w) v$ Y' Q
rem 清理系統圖示暫存登錄碼" S/ K9 a. U" n% `
echo y　reg delete "HKEY_CLASSES_ROOT\Local Settings\Software\Microsoft\Windows\CurrentVersion\TrayNotify" /v IconStreams8 F1 U& C5 K) \5 K- |2 o6 g/ x. O, D
echo y　reg delete "HKEY_CLASSES_ROOT\Local Settings\Software\Microsoft\Windows\CurrentVersion\TrayNotify" /v PastIconsStream　　