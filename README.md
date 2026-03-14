# Root-Emojis

Root-Emojis adds custom chat emoji aliases for Minecraft Bedrock.

Players can type supported aliases such as `:smile:` or `:angry:` in chat, and the plugin replaces them with the matching custom glyph from the emoji resource pack.

## How it works

When a player sends a message containing a supported alias, the plugin replaces it with the corresponding custom Unicode glyph.

Example:

```text
Hello :smile:
```

becomes the matching emoji in game.

## Available Emojis

| Alias | Description |
|---|---|
| `:smile:` | Smile |
| `:happy:` | Happy |
| `:lol:` | Laughing |
| `:xD:` | XD |
| `::'):` | Happy tears |
| `:angel:` | Angel |
| `::):` | Simple smile |
| `:(::` | Upside-down / awkward smile |
| `:;):` | Wink |
| `:proud:` | Proud |
| `:heart_eyes:` | Heart eyes |
| `:love:` | In love |
| `:kiss:` | Kiss |
| `::p:` | Tongue out |
| `:xp:` | Playful tongue |
| `:think:` | Thinking |
| `:nerd:` | Nerd |
| `:sun_glasses:` | Sunglasses |
| `:star_eyes:` | Star eyes |
| `:fest:` | Party |
| `:sad:` | Sad |
| `:cry:` | Crying |
| `:angry:` | Angry |
| `:boom:` | Exploding head / boom |
| `:o_o:` | Surprised |
| `:hot:` | Hot |
| `:cold:` | Cold |
| `:shocked:` | Shocked |
| `:sus:` | Suspicious |
| `:shy:` | Shy |
| `:shhh:` | Quiet / shush |
| `:vomit:` | Vomit |
| `:cash:` | Money face |
| `:cowboy:` | Cowboy |
| `:devil:` | Devil |
| `:clown:` | Clown |
| `:poop:` | Poop |
| `:ghost:` | Ghost |
| `:skull:` | Skull |
| `:dead:` | Dead |
| `:eyes:` | Eyes |
| `:moai:` | Moai |
| `:uwu:` | UwU |
| `:creep:` | Creepy |

## Usage

Type any supported alias directly in chat.

Examples:

```text
Good morning :smile:
That was funny :lol:
No way :shocked:
You are sus :sus:
I am dead :skull: :dead:
```

## Notes

- These emojis only display correctly if the server resource pack includes the matching glyphs.
- If the resource pack is missing or not accepted, players will not see the intended emojis correctly.
- Aliases are case-sensitive unless you explicitly make the parser case-insensitive.