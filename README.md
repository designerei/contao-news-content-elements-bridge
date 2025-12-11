# Contao News Content Elements Bridge

A lightweight bridge that exposes the existing **Contao News frontend modules** as **Content Elements**.  
Built for **Contao 5.3** to support projects moving away from classic frontend modules.

This extension does **not** add new logic or templates. It simply mirrors the configuration and behavior of the original News modules and makes them available as content elements.

---

## Features

- Content-element equivalents for:
    - News list
    - News reader
    - News archive
- Uses the original module configuration
- No styling, no overrides, minimal footprint

---

## Installation

```bash
composer require designerei/contao-news-content-elements-bridge
```

---

## Usage

The provided content elements appear in the backend and behave exactly like their module counterparts, using the templates from the Contao News Bundle.

---
