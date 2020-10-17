#!/bin/bash
share='/media/user/DA18EBFA09C1B27D/share/daoh/'
# dir=$(ls -F | grep '/$' | cut -d '/' -f1)
dir=$(ls)


function max() {
for temp in $dir; do
	if [[ -f $temp ]]; then
		# echo "$temp是文件"
		du -s $temp | sort -n >>temp.txt
	elif [[ -d $temp ]]; then
		echo "$temp是目录//////////////////"
	fi
done	
}

max