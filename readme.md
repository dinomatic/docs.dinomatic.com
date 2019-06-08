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

# make an archive of production files
zip -r build_production.zip build_production/

# upload build_production.zip to the server
#scp build_production.zip USER@IP:DIRECTORY

# unzip the build_production.zip
unzip build_production.zip

# remove the current directory 'docs'
rm -rf docs/

# rename 'build_production' to 'docs'
mv build_production docs
```
