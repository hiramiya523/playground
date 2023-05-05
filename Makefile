# common cmd
u:
	docker compose up -d
d:
	docker compose down
b:
	docker compose build --no-cache --force-rm --parallel
l:
	docker compose logs
ps:
	docker compose ps
top:
	docker compose top

# depend on env
app:
	docker compose exec app bash

db:
	docker compose exec db bash