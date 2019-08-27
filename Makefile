.PHONY: phar
phar:
	rm -f aws.phar
	wget https://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar
	php -f aws-sdk-version.php > AWS_SDK_VERSION
