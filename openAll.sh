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

find ./algorithms -name "*-*.svg" >./print.txt
find ./archetypes -name "*-*.svg" >>./print.txt
find ./methods -name "*-*.svg" >>./print.txt
find ./psychiatrists -name "*-*.svg" >>./print.txt
find ./technolgies -name "*-*.svg" >>./print.txt


echo -e "\e[34mPlease put $(cat ./print.txt |wc -l) A6 Cards \e[31m
"
figlet -w 120 -f banner $(cat ./print.txt |wc -l) A6-Cards 
echo -e "into your default printer \e[0m"

echo "
=> some printers have issues with that much cards in the manual paper tray, edit this file for this problem

=> we also suggest to test it first manually, some printers turn the card, some turn them twice, after that the file for the backside
   of the card opens, in that case you have to choose $(cat ./print.txt|wc -l) copies manually after you have
   put the cards the other direction into the printer

=> after pressing enter, dont touch your computer until the cards are all printed
"

echo -n "continue (y/n)? "
read answer
if echo "$answer" | grep -iq "^y" 
then

 /usr/bin/inkscape &



 for i in $(cat ./print.txt)
  do

   /usr/bin/inkscape $i 



  done

else
    echo not not printing
fi

echo -n "print on Canon GP501 Paper (y/n)? "
read answer
if echo "$answer" | grep -iq "^y"
then

  #/usr/bin/inkscape ./back/back.svg    &
  /usr/bin/inkscape ./back/back-canon-GP501.svg &
  sleep 5
  xdotool key ctrl+p

else

  /usr/bin/inkscape ./back/back.svg &
  sleep 5
  xdotool key ctrl+p

fi