export default {
    asset(before = '', value, after = '') {
        return before + value + after;
    },

    image(imageMeta) {
        let before = imageMeta.before ? imageMeta.before : '';
        let after = imageMeta.after ? imageMeta.after : '';
        return this.asset('/images/' + before, imageMeta.fileName, after);
    },
    avatar(fileName) {
        return this.image({before: 'avatars/', fileName: fileName, after: '.png'});
    }
};
