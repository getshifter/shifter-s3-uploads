files := shifter-s3-uploads.zip shifter-s3-uploads.php AWS_SDK_VERSION.txt aws.phar

.PHONY: phar archive

phar:
	rm -f aws.phar
	wget https://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar
	php -f aws-sdk-version.php | tee AWS_SDK_VERSION.txt
	@echo

archive:
	rm -f shifter-s3-uploads.zip
	zip shifter-s3-uploads.zip $(files)
