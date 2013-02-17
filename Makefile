test:
	./node_modules/.bin/mocha \
		--reporter list
nw:	clean
	mkdir -p bin
	zip -r bin/fractals.nw *

clean:
	rm -R bin/


.PHONY: test
