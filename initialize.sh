#!/bin/bash
mkdir -p /tmp/repos/repo1
mkdir -p /tmp/repos/repo2
mkdir -p /tmp/repos/repo3

cd /tmp/repos/repo1
git init
touch README
git add README
git commit -m 'version initiale'

cd /tmp/repos/repo2
git init
touch README
git add README
git commit -m 'version initiale'

cd /tmp/repos/repo3
git init
touch README
git add README
git commit -m 'version initiale'

