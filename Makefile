restart:
	sudo service apache2 restart

status:
	sudo service apache2 status
	sudo service mysql status

errors:
	tail /var/log/apache2/error.log
