rsync -avzP --rsh=ssh ~/Web/aetherdestroyer root@covalent.aetherdestroyer.net:/var/www/

if [ $# -eq 0 ]; then
	exit 0
fi

git add .
git commit -m "$1"
git push
