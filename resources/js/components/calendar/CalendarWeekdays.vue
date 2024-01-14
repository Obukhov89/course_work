<template>
  <tr class="day-of-week">
    <td style="text-decoration: none" v-for="weekday in weekdays" :key="weekday">{{ weekday }}</td>
  </tr>
</template>

<script>
const WEEKDAYS = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];

export default {
  name: "CalendarWeekdays",

  computed: {
    weekdays() {
      return WEEKDAYS;
    }
  }
};
</script>

<style scoped>
.day-of-week {
  text-decoration: none;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
}

.day-of-week td{
  text-align: center;
}


.day-of-week > * {
  text-align: right;
  padding-right: 5px;
}
</style>