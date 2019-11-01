files := shifter-s3-uploads.php

.PHONY: phar archive clean

phar:
	rm -f aws.phar
	wget -nv https://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar
	php -f aws-sdk-version.php | tee AWS_SDK_VERSION.txt
	@echo

archive:
	rm -f shifter-s3-uploads.zip
	zip shifter-s3-uploads.zip $(files)

clean:
	rm -f shifter-s3-uploads.zip AWS_SDK_VERSION.txt aws.phar
