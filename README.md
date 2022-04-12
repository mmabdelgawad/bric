# Bric

## # Installation Steps

- Clone the project
- Run the project containers using
```bash
bash ./bric up
```
- Add a local domain in hosts file
```bash
sudo sh -c "echo 127.0.0.1       bric.local >> /etc/hosts"
```
---
- To stop bric running containers
```bash
bash ./bric down
```
- To access phpmyadmin use `http://bric.local:8082`
