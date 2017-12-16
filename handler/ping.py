#!/usr/bin/python

import os
import sys

hostname = sys.argv[1]
resp = os.system("ping -c 1 " + hostname)

# check respon
if resp == 0:
	print("1")
else:
	print("0")