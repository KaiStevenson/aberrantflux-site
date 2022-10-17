rsync -avzP --rsh=ssh . root@www.aberrantflux.xyz:/var/www/aberrantflux-site

if [ $# -eq 0 ]; then
	exit 0
fi

git add .
git commit -m "$1"
git push
