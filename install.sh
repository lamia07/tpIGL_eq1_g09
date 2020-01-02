cp ./src/setup.sh ./src/myapp/
docker-compose up -d && echo "Please wait while service is up..." && sleep 5 && docker exec myapp-web /var/www/myapp/setup.sh && echo "All done"