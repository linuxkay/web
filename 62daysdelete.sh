#!/bin/bash
find /home/$USER/ -name "*.tar.gz" -type f -mtime +62 -delete

