## Posts

| Task                                                         | Implemented        | Tested | Notes |
|:-------------------------------------------------------------|:-------------------|:-------|:------|
| Seed *Post* dates                                            | :heavy_check_mark: |        |       |
| Dates and times should be presented in human friendly format | :heavy_check_mark: | :x:    |       |
| Sort *posts* newest to oldest                                | :heavy_check_mark: |        |       |
| *Posts* can be labeled as NSFW, 18+, 16+ 13+ U               | :x:                | :x:    |       |

### Likes

| Task                             | Implemented        | Tested | Notes                 |
|:---------------------------------|:-------------------|:-------|:----------------------|
| A *user* can **like** a *post*   | :x:                | :x:    | *User*^1^ → *Post*^m^ |
| A *user* can **unlike** a *post* | :x:                | :x:    | *User*^1^ → *Post*^m^ |
| Seed *Likes*                     | :heavy_check_mark: | na     |                       |

## Comments

### Likes

| Task                         | Implemented | Tested | Notes |
|:-----------------------------|:------------|:-------|:------|
| A user can *like* a comment. | :x:         | :x:    |       |

## Authentication
| Task                                                                             | Implemented | Tested | Notes |
|:---------------------------------------------------------------------------------|:------------|:-------|:------|
| *Users* must **login** there is no concept of a guest user able  to see content. | :x:         | :x:    |       |

## Authorization

| Task                                                                                       | Implemented | Tested | Notes                      |
|:-------------------------------------------------------------------------------------------|:------------|:-------|:---------------------------|
| a *User* who is logged but without a *family group* can see their settings only, no posts. | :x:         | :x:    |                            |
| Posts can only be viewed by family members                                                 | :x:         | :x:    |                            |
| Only adults can create a family group                                                      | :x:         | :x:    |                            |
| A family group owner can only add other adults members to the group                        | :x:         | :x:    |                            |
| Adult members can add their children to the group.                                         | :x:         | :x:    | Member is marked as parent |
| Parents can set age appropriate filters for their children                                 | :x:         | :x:    | Ex. 18+, 16+, 13+ or U     |
| A parent can always see their children's posts and activity.                               | :x:         | :x:    | Child can't block them     |

## Blocking/Following

Unlike other social networks, being part of a family group means
automatically following all members in the family. Therefore a mechanism
to mute is required.

| Task                                                                                 | Implemented | Tested | Notes                                                       |
|:-------------------------------------------------------------------------------------|:------------|:-------|:------------------------------------------------------------|
| A *family member* can **mute** other *family members*                                | :x:         | :x:    |                                                             |
| A parent can **block** their *children* from seeing content from any *family member* | :x:         | :x:    | blocking means the child doesn't even see the family member |

### Bookmarks

| Task                                    | Implemented | Tested | Notes                  |
|:----------------------------------------|:------------|:-------|:-----------------------|
| A *user* can **bookmark** many *posts*. | :x:         | :x:    | *User*^1^ → *Post**^m^ |
| Seed *Bookmarks*                        | :x:         | :x:    |                        |

### Sharing

| Task                             | Implemented | Tested | Notes |
|:---------------------------------|:------------|:-------|:------|
| A *user* can share many *posts*. | :x:         | :x:    |       |

### Stories

| Task                                             | Implemented | Test | Notes |
|:-------------------------------------------------|:------------|:-----|:------|
| A user can **create** *Stories*                  | :x:         | :x:  |       |
| A user can **add** existing *posts* to *Stories* | :x:         | :x:  |       |
| A user can **add** new *posts* to *Stories*      | :x:         | :x:  |       |
| Seed *Stories*                                   | :x:         | :x:  |       |


## UI

| Task                                                          | Implemented | Tested | Notes |
|:--------------------------------------------------------------|:------------|:-------|:------|
| Dates and times should be presented in human friendly format. | :x:         | :x:    |       |

## \#tags

| Task                                                 | Implemented | Tested | Notes                              |
|:-----------------------------------------------------|:------------|:-------|:-----------------------------------|
| A user can **tag** *posts* and *comments* with #tags | :x:         | :x:    | (*Post,Comment*)^m^ → *HashTag*^m^ |
| Seed *Posts* and *Comments* with *HashTags*          | :x:         | :x:    |                                    |
| A *user* can **search** via #tags.                   | :x:         | :x:    |                                    |

## @mention support

| Task                                                             | Implemented | Tested | Notes |
|:-----------------------------------------------------------------|:------------|:-------|:------|
| A *user* can **mention** other *Users* in *posts* and *comments* | :x:         | :x:    |       |
| Seed *Posts* and *Comments* with **Mentions**                    | :x:         | :x:    |       |
| *Users* should be *notified* when they are **Mentioned**         | :x:         | :x:    |       |
