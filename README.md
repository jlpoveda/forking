# forking
Fork some php processes using bash

Usage:
```bash
sh reader.sh uno.txt >> /tmp/output.log &
sh reader.sh dos.txt >> /tmp/output.log &
```

And you can see the result:
```bash
tail -f /tmp/output.log
```