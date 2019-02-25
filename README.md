# docker-php-tutorial
- Part 1: [Setting up PHP for local development on Docker: A primer on PHP on Docker in Windows.](https://www.pascallandau.com/blog/php-php-fpm-and-nginx-on-docker-in-windows-10/)
- Part 2: [Setting up PhpStorm with Xdebug for local development on Docker: Natively and via Deployment Configuration.](https://www.pascallandau.com/blog/setup-phpstorm-with-xdebug-on-docker//)



deb http://nginx.org/packages/ubuntu/ xenial nginx
deb-src http://nginx.org/packages/ubuntu/ xenial nginx

deb http://nginx.org/packages/mainline/ubuntu/ xenial nginx
deb-src http://nginx.org/packages/mainline/ubuntu/ xenial nginx



It seems the kernel extensions were not loaded correctly.

 

Would you like have a try of the following steps please?

1. Reboot the macOS

2. Open System Preferences > Security & Privacy, change the Allow apps downloaded from to be App Store and identified developers

3. Move VMware Fusion.app from /Applications into the ~/Desktop

    Drag VMware Fusion.app by pressing the Option key,

    Drop it on to ~/Desktop,

    Remove the /Applications/VMware Fusion.app

4. Move VMware Fusion.app from ~/Desktop into /Applications

5. Double click VMware Fusion.app to run

(Note: Here the dialog VMware Fusion requires administrative privileges ... should appear)

6. If the VM still can't be powered on, goto the System Preferences > Security & Privacy, and there should be a message to let you enable to load the kernel extensions.