# Docker build Images

### Build Imagen

```
docker build -t <user>/<imageName>:<version> dir
```

### Start Container

```
docker run --rm -d --name myapp -p 80:80  <user>/<imageName>:<version>
```

## Debug Dockerfile

### Build Image Debug

```
docker build -t <user>/<imageName>:<version-test> -f Dockerfile.test dir
```

### Start Container

```
docker run --rm -d --name myapp -p 80:80  <user>/<imageName>:<version-test>
```
