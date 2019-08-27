files := shifter-s3-uploads.zip shifter-s3-uploads.php AWS_SDK_VERSION aws.phar

.PHONY: phar archive

phar:
	rm -f aws.phar
	wget https://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar
	php -f aws-sdk-version.php > AWS_SDK_VERSION

archive:
	rm -f shifter-s3-uploads.zip
	zip shifter-s3-uploads.zip $(files)
