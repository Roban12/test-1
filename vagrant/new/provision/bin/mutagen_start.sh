#!/bin/bash

PROJECT_PATH=$PWD

mutagen daemon start

ssh-add -K ${PROJECT_PATH}/.vagrant/machines/default/virtualbox/private_key

ssh -t vagrant@"${2}" "cd && exit"

mutagen create \
    --label="${1}"-sync=html \
    --default-file-mode=0644 \
    --default-directory-mode=0755 \
    --sync-mode=two-way-resolved \
    --ignore=/pub/media/catalog/product \
    --ignore=/pub/static \
    --ignore=/var \
    --ignore=/vendor \
    --ignore=node_modules \
    --ignore-vcs \
    ${PROJECT_PATH}/magento vagrant@"${2}":"${3}"

mutagen create \
    --label="${1}"-sync=pwa \
    --default-file-mode=0644 \
    --default-directory-mode=0755 \
    --sync-mode=two-way-resolved \
    --ignore=node_modules \
    --ignore=html/node_modules \
    --ignore-vcs \
    ${PROJECT_PATH}-frontend vagrant@"${2}":"${3}-frontend"

mutagen create \
    --label="${1}"-sync=vendor \
    --default-file-mode=0644 \
    --default-directory-mode=0755 \
    --sync-mode=two-way-resolved \
    --watch-mode-alpha=no-watch \
    --symlink-mode=posix-raw \
    --ignore-vcs \
    ${PROJECT_PATH}/magento/vendor vagrant@"${2}":"${3}"/vendor
