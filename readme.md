# DinoMatic Docs

## Build

```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, staging, production
npm run dev
```

## Deploy

```bash
# complie assets
npm run production

# build for production
./vendor/bin/jigsaw build

# commit changes
git add . && git commit -m "Build for Deploy"

# git subtree push to deploy branch
git subtree push --prefix build_production/ origin deploy

# pull changes on the server
git pull
```
