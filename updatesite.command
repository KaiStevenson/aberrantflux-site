if [ $# -eq 0 ]; then
	exit 0
fi


rsync -avzP --rsh=ssh ~/Web/aetherdestroyer root@aetherdestroyer.net:/var/www/
git add .
git commit -S -m "$1"
git push origin main
