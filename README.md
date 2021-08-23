# Simple package to represent a value that has not been set

![CI pipeline](https://github.com/szemul/not-set-value/actions/workflows/php.yml/badge.svg)

This class/interface is useful in case for example in objects representing API requests, where a `null` value means something different from when a value is not sent. For example a `null` value can mean that something should be set to `null`, while a not sent value means the consumer does not want to change the current value.


