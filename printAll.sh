#!/bin/bash

#unfortunately inkscape -p has a bug in debian jessie => Workarround

echo "


"

echo -n "install required debian jessie packages (y/n)? "
read answer
if echo "$answer" | grep -iq "^y" ;then
sudo apt-get install xdotool figlet
else
    echo not installing packages
fi

echo "

"
echo put $(find ./finished |grep svg$ |wc -l) A6 Cards into your printer

figlet -w 120 -f banner put $(find ./finished |grep svg$ |wc -l) A6-Cards into your printer

echo "
=> some printers have issues with that much cards in the manual paper tray, edit this file for this problem

=> after pressing enter, dont touch your computer until the cards are all printed
"

echo -n "continue (y/n)? "
read answer
if echo "$answer" | grep -iq "^y" 
then

 /usr/bin/inkscape &

 for i in $(find ./finished |grep svg$)
  do

   /usr/bin/inkscape $i &

   sleep 5
   xdotool key ctrl+p
   sleep 2
   xdotool key KP_Enter
   sleep 5
   xdotool key alt+F4

   echo printed $i
  done

else
    echo not not printing
fi


exit 0

sleep 15

/usr/bin/inkscape $i &

sleep 5
xdotool key ctrl+p
sleep 2
xdotool key KP_Enter
sleep 5
xdotool key alt+F4


