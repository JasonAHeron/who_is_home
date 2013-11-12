whoishome
=========

A program to perform arp-scans of a network and print to a webpage whether or not someone is on the wireless network based on the presence of a phone's MAC address.

Requires arp-scan program and root access to the machine running the program

Setup:

1. add "index.php" and "inc/" to your web server's root directory

2. in "index.php" add the names and corresponding MAC addresses of the people you are looking to scan for

3. create /home/secure with root as the owner and permissions set to 755

4. add "arp-scan.sh" to /home/secure and make it executable (chmod +x arp-scan.sh)

5. to your crontab file, add the command listed in "crontab"

6. restart your machine and enjoy
