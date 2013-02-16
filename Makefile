test:
	./node_modules/.bin/mocha \
		--reporter list
nw:
	mkdir -p bin
	zip -r bin/fractals.nw *

.PHONY: test
