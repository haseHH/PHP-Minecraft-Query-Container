# PHP-Minecraft-Query-Container

This repository provides a small PHP container to provide an HTTP endpoint for information about a Minecraft Server. There are many public services to do the same, but in the nature of being publicly hosted they can't be used to query details about private, LAN-only servers.

This small service relies on functions from [xPaw/PHP-Minecraft-Query](https://github.com/xPaw/PHP-Minecraft-Query) and wraps them into easy-to-use HTTP endpoints, packaged in a portable Docker container image.

## Usage

Build and run the container:

```
docker build -t php-minecraft-query .
docker run -d -p 9000:80 --name php-minecraft-query-container php-minecraft-query
```

Open the resulting webserver with your browser by navigating to [http://localhost:9000](http://localhost:9000) and look at the examples.

Remove the container when no longer needed:

```
docker rm php-minecraft-query-container --force
```

## Final Notes

I'm not a PHP developer and not familiar with the ususal tools like composer for dependency management, therefore this simply fetches the raw PHP files from GitHub. I also have no knowledge about potenially necessary security precautions - so if you build and deploy this container image, you do so at your own risk.

The no-warranty part is also reinforced by this repo being published [without any licensing](./LICENSE) and the [xPaw/PHP-Minecraft-Query](https://github.com/xPaw/PHP-Minecraft-Query) functions being published under the [MIT license](https://github.com/xPaw/PHP-Minecraft-Query/blob/master/LICENSE).