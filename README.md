# Takeaway
Download zip files and remove them afterwards.
Usage: create a folder and put this index.php there.
The URL http(s)://whatever.com/wherever/index.php?file=THISISTHEFILENAME will open THISISTHEFILENAME.zip and delete it afterwards.
Anyone knowing the link can download the content, but it can be downloaded only once, thus compromise could be easily detected.

## Hints:

1. Use https for accessing your resources: the URL will not be visible for anyone.

2. Use random pattern for the folder name instead of "wherever", you will not be beaten by crawling auto discoverers.

3. Use random pattern for filenames instead of "THISISTHEFILENAME", and the bad guys will never figure out what it is.

E.g. https://guesswhat.com/j5K9v8CU6syAMoiwpKVp4W/index.php?file=QPQe7FiaK9SxSS6Nvv7px2
