#!/bin/bash
filename="$1"
while read -r line
do
    php fork.php $line
done < "$filename"