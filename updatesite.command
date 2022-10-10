rsync -avzP --rsh=ssh . root@covalent.aetherdestroyer.net:/var/www/aetherdestroyer

if [ $# -eq 0 ]; then
	exit 0
fi

git add .
git commit -m "$1"
git push
