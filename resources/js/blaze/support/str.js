export default {
    limit(value, limit, end='…') {
        return value.length >= limit ? value.substring(0, limit) + end : value;
    },

    lower(value) {
        return value.toLowerCase();
    },

    upper(value) {
        return value.toUpperCase();
    }
};
