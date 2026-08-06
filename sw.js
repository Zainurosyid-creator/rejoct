const CACHE_NAME = "ekgjg-v1";

const FILES = [
  "/",
  "/index.html",
  "/about.html",
  "/style.css",
  "/script.js",
  "/manifest.json"
];

self.addEventListener("install", (event) => {
  console.log("Service Worker terpasang");

  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(FILES);
    })
  );
});

self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});