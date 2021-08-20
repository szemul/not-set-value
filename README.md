# Simple class to represent a value that has not been set

This class is useful in case for example in classes representing API requests, where a `null` value means something different from when a value is not sent. For example a `null` value can mean that something should be set to `null`, while a not sent value means the consumer does not want to change the current value.
