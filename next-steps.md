## Authentication and Authorization

| Status | Task                                                                | Notes                      |
|:-------|:--------------------------------------------------------------------|:---------------------------|
| :x:    | Posts can only be viewed by family members                          |                            |
| :x:    | Only adults can create a family group                               |                            |
| :x:    | A family group owner can only add other adults members to the group |                            |
| :x:    | Adult members can add their children to the group.                  | Member is marked as parent |
| :x:    | Parents can set age appropriate filters for their children          | Ex. 18+, 16+, 13+ or U     |
| :x:    | A parent can always see their children's posts and activity.        | Child can't block them     |

## Posts

| Status             | Task                                                         | Notes |
|:-------------------|:-------------------------------------------------------------|:------|
| :heavy_check_mark: | Seed *Post* dates                                            |       |
| :heavy_check_mark: | Dates and times should be presented in human friendly format |       |
| :heavy_check_mark: | Sort *posts* newest to oldest                                |       |
| :x:                | *Posts* can be labeled as NSFW, 18+, 16+ 13+ U               |       |

### Likes

| Status | Task                               | Notes                 |
|:-------|:-----------------------------------|:----------------------|
| :x:    | A *user* can **like** many *posts* | *User*^1^ → *Post*^m^ |
| :x:    | Seed *Likes*                       |                       |

### Bookmarks

| Status | Task                                    | Notes                  |
|:-------|:----------------------------------------|:-----------------------|
| :x:    | A *user* can **bookmark** many *posts*. | *User*^1^ → *Post**^m^ |
| :x:    | Seed *Bookmarks*                        |                        |

### Sharing

| Status | Task                             | Notes |
|:-------|:---------------------------------|:------|
| :x:    | A *user* can share many *posts*. |       |

### Comments

| Status | Task                         | Notes |
|:-------|:-----------------------------|:------|
| :x:    | A user can *like* a comment. |       |

### Stories

| Status | Task                                             | Notes |
|:-------|:-------------------------------------------------|:------|
| :x:    | A user can **create** *Stories*                  |       |
| :x:    | A user can **add** existing *posts* to *Stories* |       |
| :x:    | A user can **add** new *posts* to *Stories*      |       |
| :x:    | Seed *Stories*                                   |       |


## UI

| Status | Task                                                          | Notes |
|:-------|:--------------------------------------------------------------|:------|
| :x:    | Dates and times should be presented in human friendly format. |       |

## \#tags

| Status | Task                                                   | Notes                              |
|:-------|:-------------------------------------------------------|:-----------------------------------|
| :x:    | A user can **tag** *posts* and *comments* with a #tags | (*Post,Comment*)^m^ → *HashTag*^m^ |
| :x:    | Seed *Posts* and *Comments* with *HashTags*            |                                    |

- [ ] Add the ability for the users to search for #tags.

## @mention support

| Status | Task                                                             | Notes |
|:-------|:-----------------------------------------------------------------|:------|
| :x:    | A *user* can **mention** other *Users* in *posts* and *comments* |       |
| :x:    | Seed *Posts* and *Comments* with **Mentions**                    |       |
| :x:    | *Users* should be *notified* when they are **Mentioned**         |       |
