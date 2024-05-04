if [ ${USER_ID:-0} -ne 0 ] && [ ${GROUP_ID:-0} -ne 0 ]; then

    echo "User and group different than 0"
    echo "deleting www-data user"
    userdel -f www-data

    if getent group www-data ; then
        echo "removing www-data group"
        groupdel www-data;
    fi

    echo "add new group www-data ({$GROUP_ID})"
    groupadd -g ${GROUP_ID} www-data

    echo "add new user www-data ({$USER_ID})"
    useradd -l -u ${USER_ID} -g www-data www-data

    echo "Copying all files from old www-data to new www-data"
    install -d -m 0755 -o www-data -g www-data /home/www-data

    echo "Change old www-data user and group by the new ones..."
    chown --changes --silent --no-dereference --recursive --from=33:33 ${USER_ID}:${GROUP_ID} /var/www/ /home/www-data /.composer /var/run/php-fpm /var/lib/php/sessions
fi

echo "Finishing."
