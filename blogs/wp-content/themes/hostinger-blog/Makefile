THEME_FILE_NAME:= "hostinger-blog.zip"

PHONY: clean-release
clean-release:
	@echo "Cleaning release file"
	rm -rf ./build-release/hostinger-blog*
	rm -f ./build-release/hostinger-blog*.zip

PHONY: build-release
build-release: clean-release
	@echo "Building release:" $(THEME_FILE_NAME)\
	"Compiling assets:"\
	&& npm install\
	&& npm run build-all\
	&& THEME_NAME=$(THEME_FILE_NAME)\
	&& cd ./build-release && mkdir hostinger-blog\
	&& rsync -r --exclude 'build-release' --exclude 'node_modules' --exclude 'src' --exclude 'assets/mix-manifest.json' --exclude 'package.json' --exclude 'package-lock.json' --exclude 'webpack.mix.js' --exclude 'changelog.txt' --exclude 'changelog.md'  --exclude 'README.md' --exclude 'phpcs.xml.dist' ../* hostinger-blog\
	&& zip --verbose -r $$THEME_NAME hostinger-blog/*\
	&& rm -rf hostinger-blog
