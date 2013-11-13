whoishome
=========

A program to perform arp-scans of a network and print to a webpage whether or not someone is on the wireless network based on the presence of a phone's MAC address.

Prerequisites:

1. arp-scan

2. webserver

3. wireless card

Setup:

1. download all files

2. add "index.php" and "inc/" to your web server's root directory

3. in "index.php" add the names and corresponding MAC addresses of the people you are looking to scan for

4. create /home/secure with root as the owner and permissions set to 755

5. add "arp-scan.sh" to /home/secure and make it executable (chmod +x arp-scan.sh)

6. in "arp-scan.sh" ensure that the interface is correct

7. to your crontab file, add the command listed in "crontab"

8. restart your machine and enjoy
