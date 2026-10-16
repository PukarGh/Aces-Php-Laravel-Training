# Aces PHP & Laravel Training

Code from a five-day hands-on training on PHP and Laravel. Each day of the course lives on its own branch.

## The problem it solves

Beginners often jump into Laravel without a solid grasp of plain PHP, and then struggle to tell what is the language and what is the framework. This training builds up step by step: core PHP first, then Laravel fundamentals, then a small real project, so each concept is learned before the next one depends on it.

## Course outline

| Branch | Topic |
|--------|-------|
| `day-1` | Basic PHP concepts: variables and types, arrays, conditionals, loops, functions, operators, classes and inheritance |
| `day-2` | Laravel basic concepts |
| `day-3` | Login system and starting the project |
| `day-4` | Events: edit/update and "Going / Not Going" responses |
| `day-5` | Refactoring and advanced concepts |

Check out a day to see the code for that session:

```bash
git checkout day-3
```

## Running the examples

With PHP installed, run the built-in server from the repo root:

```bash
php -S localhost:8000
```

Then open http://localhost:8000. Most `echo` lines in the code are commented out; uncomment the ones you want to try.
