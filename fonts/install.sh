#!/bin/bash

mkdir ~/.fonts
cp *.ttf ~/.fonts
cp *.TTF ~/.fonts
fc-cache -f -v
