#!/bin/bash
pdftk $1 cat 1north output $1.new
mv $1 $1.od
mv $1.new $1
