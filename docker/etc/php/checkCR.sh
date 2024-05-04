#!/bin/bash
isDosFile() {
    [[ $(head -1 "$1") == *$'\r' ]]
}

if isDosFile /home/changeuser.sh; then
    echo "DOS TO UNIX"
    sed $'s/\r$//' /home/changeuser.sh | tee /home/changeuser.sh
else
    echo "UNIX TO DOS"
    sed $'s/$/\r/' /home/changeuser.sh | tee /home/changeuser.sh
fi

